////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 
//      preview image when selecting image to upload                                            
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 
//      End Image preview script                                            
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 
//      Upload Scirpts
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////

//For workshops
$(document).ready(function(e)
{
    $("#workshopForm").on('submit',function(e){
        e.preventDefault();
        $('.loading').css({
            "background-color":"rgba(255,255,255,.5)",
            "z-index":"99999"
        }).fadeIn();

        $.ajax({
            url: 'ajax/calls/workshop.php',
            method: 'post',
            data : new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data){
                $('.loading').css({
                    "background-color":"transparent",
                    "z-index":"-1"
                }).fadeOut();
                $(".form-container").html(data);
            },
            error: function(){
                $(".form-container").html("Unable to upload file. Please try again later....");
            }
        });
    });
});

//for seminars
$(document).ready(function(e){
    $('#seminarForm').on('submit',function(e){
        e.preventDefault();
        $('.loading').css({
            "background-color":"rgba(255,255,255,.5)",
            "z-index":"9999"
        }).fadeIn();

        $.ajax({
            url: 'ajax/calls/seminars.php',
            method: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('.loading').css({
                    "background-color":"transparent",
                    "z-index":"-1"
                }).fadeOut();
                $(".form-container").html(data);
            },
            error: function(){
                $('.form-container').html("Unable to upload file. Please try again later");
            }
        });
    });
});

//for Guest Lectures
$(document).ready(function(e){
    $('#glecturesForm').on('submit',function(e){
        e.preventDefault(0);
        $('.loading').css({
            "background-color":"rgba(255,255,255,.5)",
            "z-index":"9999"
        });

        $.ajax({
            url: 'ajax/calls/glectures.php',
            method: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('.loading').css({
                    "background-color":"transparent",
                    "z-index":"-1"
                });
                $(".form-container").html(data);
            },
            error: function()
            {
                $('.form-container').html("Unable to upload! Please try again later");
            }
        });
    });
});


//for Industrial Visit
$(document).ready(function(e){
    $('#ivForm').on('submit',function(e){
        e.preventDefault(0);
        $('.loading').css({
            "background-color":"rgba(255,255,255,.5)",
            "z-index":"9999"
        });

        $.ajax({
            url: 'ajax/calls/iv.php',
            method: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('.loading').css({
                    "background-color":"transparent",
                    "z-index":"-1"
                });
                $(".form-container").html(data);
            },
            error: function()
            {
                $('.form-container').html("Unable to upload! Please try again later");
            }
        });
    });
});


//for Events Visit
$(document).ready(function(e){
    $('#eventForm').on('submit',function(e){
        e.preventDefault(0);
        $('.loading').css({
            "background-color":"rgba(255,255,255,.5)",
            "z-index":"9999"
        });

        $.ajax({
            url: 'ajax/calls/events.php',
            method: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('.loading').css({
                    "background-color":"transparent",
                    "z-index":"-1"
                });
                $(".form-container").html(data);
            },
            error: function()
            {
                $('.form-container').html("Unable to upload! Please try again later");
            }
        });
    });
});


// Form Approval
function approve(elem, id)
{
    $('.loading').css({
        "background-color":"rgba(255,255,255,.5)",
        "z-index":"9999"
    });

    $.ajax({
        url: 'ajax/calls/approve.php',
        data: {id : id},
        type: 'post',
        success: function(data)
        {
            $('.loading').css({
                "background-color":"transparent",
                "z-index":"-1"
            });
            $(elem).css({"color":"inherit"});
            $(elem).removeAttr("onclick");
            $(elem).removeClass("btn");
            $(elem).html(data);
        }
    });
}

function viewApprove(elem, id)
{
    $('.loading').css({
        "background-color":"rgba(255,255,255,.5)",
        "z-index":"9999"
    });

    $.ajax({
        url: '../admin/ajax/calls/approve.php',
        data: {id : id},
        type: 'post',
        success: function(data)
        {
            $('.loading').css({
                "background-color":"transparent",
                "z-index":"-1"
            });
            $(elem).css({"color":"inherit"});
            $(elem).removeAttr("onclick");
            $(elem).removeClass("btn");
            $(elem).parent().removeClass("margin-right-small align-right");
            $(elem).parent().addClass("approved");
            $(elem).html(data);
        }
    });
}

//change password
$(document).ready(function(e){
    $('#change').on('submit',function(e){
        e.preventDefault(0);
        $('.loading').css({
            "background-color":"rgba(255,255,255,.5)",
            "z-index":"9999"
        });
        
        $.ajax({
            url: 'ajax/calls/change.php',
            method: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                $('.loading').css({
                    "background-color":"transparent",
                    "z-index":"-1"
                });
                $(".changed").html(data);
            },
            error: function()
            {
                $('.changed').html("Unable to change password");
            }
        });
    });
});

$('#dateSelect').on('change',function(){
    if(this.value == "Asc")
    {
        $.ajax({
            url: 'ajax/calls/ascApp.php',
            success: function(data)
            {
                $(".results").html(data);
            }
        });
    }
    if(this.value == "Desc")
    {
        $.ajax({
            url: 'ajax/calls/descApp.php',
            success: function(data)
            {
                $(".results").html(data);
            }
        });
    }
});


function checkCat()
{
    if($('#category').find(":selected").val() == 1 )
    {
        $('.workshops').css("display","block");
        $('.seminars').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","none");
        $('.events').css("display","none");
    }
    else if($('#category').find(":selected").val() == 2 )
    {
        $('.seminars').css("display","block");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","none");
        $('.events').css("display","none");
    }
    else if($('#category').find(":selected").val() == 3 )
    {
        $('.seminars').css("display","none");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","block");
        $('.iv').css("display","none");
        $('.events').css("display","none");
    }
    else if($('#category').find(":selected").val() == 4 )
    {
        $('.seminars').css("display","none");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","block");
        $('.events').css("display","none");
    }
    else if($('#category').find(":selected").val() == 5 )
    {
        $('.seminars').css("display","none");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","none");
        $('.events').css("display","block");
    }
    else
    {
        $('.seminars').css("display","block");
        $('.workshops').css("display","block");
        $('.guestLectures').css("display","block");
        $('.iv').css("display","block");
        $('.events').css("display","block");
    }
}

$('#category').on('change',function(){
    if(this.value == 1 )
    {
        $('.workshops').css("display","block");
        $('.seminars').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","none");
        $('.events').css("display","none");
    }
    else if(this.value == 2 )
    {
        $('.seminars').css("display","block");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","none");
        $('.events').css("display","none");
    }
    else if(this.value == 3 )
    {
        $('.seminars').css("display","none");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","block");
        $('.iv').css("display","none");
        $('.events').css("display","none");
    }
    else if(this.value == 4 )
    {
        $('.seminars').css("display","none");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","block");
        $('.events').css("display","none");
    }
    else if(this.value == 5 )
    {
        $('.seminars').css("display","none");
        $('.workshops').css("display","none");
        $('.guestLectures').css("display","none");
        $('.iv').css("display","none");
        $('.events').css("display","block");
    }
    else
    {
        $('.seminars').css("display","block");
        $('.workshops').css("display","block");
        $('.guestLectures').css("display","block");
        $('.iv').css("display","block");
        $('.events').css("display","block");
    }
});