<script>
$(document).ready(function(){
    console.log('script loaded for <?=CURRENT_URL?>');
    function make(){
        $.post("<?=POST_URL?>example",{
            'cmd': 'make'
        }, function(result){
            $('body').html(result);
        });
        
    }
    function seed(){
        $.post("<?=POST_URL?>example",{
            'cmd': 'seed'
        }, function(result){
            $('body').html(result);
        });
        
    }
    function drop(){
        $.post("<?=POST_URL?>example",{
            'cmd': 'drop'
        }, function(result){
            $('body').html(result);
        });
        
    }
    $("#makeButton").on('click', make);
    $("#seedButton").on('click', seed);
    $("#dropButton").on('click', drop);
});
</script>