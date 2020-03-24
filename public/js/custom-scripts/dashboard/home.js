
$('#track').transition({
    animation: 'fade left',
    duration: '1s',
    onComplete: function(){
        $('#maximize').transition({
            animation: 'fade left',
            duration: '1s',
            onComplete: function(){
                $('#organize').transition({
                    animation: 'fade left',
                    duration: '1s',
                    onComplete: function(){

                    }
                });
            }
        });
    }
});
