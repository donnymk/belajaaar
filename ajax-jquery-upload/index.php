<html>
<head>
<script src="jquery.min.js"></script>
<script>
//Program a custom submit function for the form
$(document).ready(function() {
    $("#data").submit(function(e){

        //disable the default form submission
        e.preventDefault();
        //grab all form data
        var formData = new FormData(this);

        $.ajax({
            url: 'formprocessing.php',
            type: 'POST',
            data: formData,
            //async: false,
            //cache: false,
            contentType: false,
            processData: false,
            success: function (returndata) {
                alert(returndata);
            }
        });
        return false;
    });
});
</script>
</head>
<body>
<form id="data">
    <input type="hidden" name="id" value="123" readonly="readonly">
    User Name: <input type="text" name="username" value=""><br />
    Profile Image: <input name="profileImg" type="file" /><br />
    Display Image: <input name="displayImg" type="file" /><br />
    <input type="submit" value="Submit">
</form>
</body>
</html>