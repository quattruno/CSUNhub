function getPhotos() {
    require 'database.php';
    $q = "SELECT id, tn_src FROM photo ORDER BY id desc";
     
    $result = $mysqli->query($q) or die($mysqli_error($mysqli));
     
    if($result) {
        while($row = $result->fetch_object()) {
            $tn_src = $row->tn_src;
            $src = $row->src;
            $id = $row->id;
         
            print '<li>
                     <a href="review_image.php?id=' . $id . '">
                      <img src="' . $tn_src . '" alt="images" id="' . $id . '" />
                    </a>
                   </li>';
                    
            print "\n";
        }
    }
}




$('#description').click(function() {
            var originalelement = this;
            var currentText = $(this).text();
 
            $(this).fadeOut(100).before('<textarea id="input" cols="40" rows="12">' + currentText + '</textarea>');
         
            $('#input').livequery('change', function() {
                var id = <?php echo $_GET['id'] ?>;
                var thisparam = this;
                var newText = $(this).val();
                 
                if (newText == '') {
                   newText = 'Please enter a description'; 
                }
                           
                $.ajax({
                    type: 'post',
                    url: 'updatePhoto.php',
                    data: 'id=' + id + '&description=' + newText,
         
                    success: function() {
                        $(thisparam).remove();
                        $(originalelement).text(newText).fadeIn(1000);
                    }
               });
                 
            });
        });
    });