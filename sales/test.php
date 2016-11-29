<?php
    //Query the database for the results we want
    $query1 = $conn->query("SELECT * FROM deliveryaddress");

    //Create an array of objects for each returned row
    while($locationArray[] = $query1->fetch_object());

    //Remove the blank entry at end of array
    array_pop($locationArray);
?>
<!--
<script>
$(document).on("change", "#locationSelectBox").function() {
  var id = $(this).val();
  $.ajax({
    url : "locationAjax.php",
    data : {
     "id" : id
    },
    type : "POST",
    dataType : "json",
    success : function(data) {
      console.log(data);
      //
      for (var x in data) {
        $('.address').val(data.address);
        $('.postalcode').val(data.postalcode);
        $('.place').val(data.place);
      }
    }
  });
});
</script>
-->

<script>
    $(document).on("change","#select-box").function(){
        var id = $(this).val();
        $.ajax({
            url      : "locationAjax.php",
            data     : {"id":id},
            type     : "POST",
            dataType : "HTML",
            success  : function(data){
                // here you can write code to asign the values to text boxes.
                $(".wrapperDiv").html(data); 
            }
        });
    });
</script>


<div class="wrapperDiv">
    <label for="locationLabel">Locatie</label>
    <select name="locations" id="locationSelectBox" >
        <option>Locatie</option>
        <?php foreach ($locationArray as $option) : ?>
            <option value="<?php echo $option->locationID; ?>"><?php echo $option->locationID; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="address" style="float:left;">Straat/No</label>
    <input type="text" name="address" id="address" placeholder="Straatnaam en nummer" />

    <label for="postalCode">Postcode</label>
    <input type="text" name="postalCode" id="postalCode" placeholder="Postcode" />

    <label for="place">Plaats</label>
    <input type="text" name="place" id="place" placeholder="Plaats" />

    <label for="contactPerson">Contact</label>
    <input type="text" name="contactPerson" id="contactPerson" placeholder="Contactpersoon" />
</div>