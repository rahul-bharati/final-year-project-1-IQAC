function readURL(input,img)
{
    var reader =  new FileReader();
    if (input.files && input.files[0]) {
        var reader = new FileReader();
    
        reader.onload = function(e) {
          $(img).attr('src', e.target.result);
        }
    
        reader.readAsDataURL(input.files[0]);
      }
}

$("#img1").change(function()
{
    readURL(this,"#img-1__img")
});

$("#img2").change(function()
{
    readURL(this,"#img-2__img")
});

$("#img3").change(function()
{
    readURL(this,"#img-3__img")
});

$("#img4").change(function()
{
    readURL(this,"#img-4__img")
});