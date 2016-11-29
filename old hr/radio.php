<script>
function r()
{
if(document.getElementById('gender_Male').checked) {
  alert('kk');
}else if(document.getElementById('gender_Female').checked) {
  //Female radio button is checked
}
}
</script>
<input type="radio" name="gender" id="gender_Male" value="Male" onClick="r()" />
<input type="radio" name="gender" id="gender_Female" value="Female" />