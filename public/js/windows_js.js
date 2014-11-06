var timer;

    function save() {
        console.log('Saved!');
    }


    function autosave() {
        // console.log(timer);

        clearTimeout(timer);
       
        timer = setTimeout(function() {
            save();
        }, 1000);
    }


   
   var textarea = ('#important')
    $('document').ready(function() {
        $('#important').on('keyup', autosave);
   });


    // var textarea = document.getElementById('important');
    // textarea.addEventListener('keyup', autosave, false);