<?php namespace Raymondoor\Model;

class DBstatement{
    private $statement;
    private $pdo;
    public function __construct(string $statement){
        $this->statement = trim($statement);
        try{
            $this->pdo = DBconnection::connect();
        }catch(\Exception $e){
            throw new \Exception('Initialize Failed: '.$e->getMessage());
        }
    }
    public function execute(array $parameters = []){
        try{
            if(empty($this->statement)){
                throw new \Exception('Statement Cannot Be Empty: '.$this->statement);
            }
            $this->pdo->beginTransaction();
            $stmt = $this->pdo->prepare($this->statement);
            if(!$stmt){ // Just in case
                throw new \Exception('Prepare Statement Failed: '.$this->statement);
            }
            $executed = $stmt->execute($parameters);
            if(!$executed){ // Just in case
                $this->pdo->rollBack();
                $errorInfo = $stmt->errorInfo();
                throw new \Exception('Execution Failed: '.$errorInfo[2]);
            }
            $result = null;
            if(strpos($this->statement, 'SELECT') == 0){
                $result = $stmt->fetchAll();
            }else{
                $result = $stmt->rowCount();
            }
            /*
            else{
                $this->pdo->rollBack();
                throw new \Exception('Unsupported Query Type: '.$this->statement);
            }
            */
            $this->pdo->commit();
            return $result;
        }catch(\Exception $e){
            if($this->pdo->inTransaction()){ // Check if in transaction before rollback
                $this->pdo->rollBack();
            }
            $errmessage = 'Query Failed: '.$e->getMessage().' - Statement: '.$this->statement;
            throw new \Exception($errmessage);
        }
    }
    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }
}