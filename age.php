<html>
<script src="js/jquery.min.js"></script>

<script type="text/javascript">
alert('sadas');
var calculateAge = function(birthday) {
    var now = new Date();
    var past = new Date(birthday);
    var nowYear = now.getFullYear();
    var pastYear = past.getFullYear();
    var age = nowYear - pastYear;

    return age;
};
//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 1000;  //time in ms, 5 second for example
var $input = $('#birthday');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});

//user is "finished typing," do something
function doneTyping () {
    var $birthday = $('#birthday').val();
    $("#ageID").va($birthday));
   
}
</script>
  <body>
    <form action="#" method="post" id="age">
        <label for="birthday">Birthday (yyyy-mm-dd)
            <input type="text" name="birthday" id="birthday" />
            <input type="text" name="ageID" id="ageID" />
        </label>
        <input type="submit" name="submit" value="Calculate your age"/>
    </form>
  </body>
</html>