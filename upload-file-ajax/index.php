<script>
    $(document).ready(function(e){
        $('#uploadForm').on('submit',(function(e){
            $.ajax({
                type:"post",
                url: "upload.php",
                data:new FormData(this),
                contentType: false,
                cache:false,
                success: function(data){
                $("#targetLayar").html(data);
                },
                error: function(){}
            });
        }));
    });
</script>

<form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
    <label>Upload File Gambar</label>
    <input name="userImage" type="file">
    <input type="submit" value="Submit">
 </form>
 <div id="targetLayar">No Image</div>