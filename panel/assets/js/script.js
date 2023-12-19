/*---------------------------
:: Scroll To Top Button
-----------------------------*/
window.onscroll=function(){
    scrollFunction()
    };
        
function scrollFunction(){
    
    if(document.body.scrollTop>50||document.documentElement.scrollTop>50)
    {   
    document.getElementById("scrollTop").style.display="block";
    }
    else
    {
        document.getElementById("scrollTop").style.display="none";
    }
}
function topFunction(){document.body.scrollTop=0;document.documentElement.scrollTop=0};
/* ----------------------------------------------------------
:: tooltip
---------------------------------------------------------- */  
$(function () {
    $('[data-bs-toggle="tooltip"]').tooltip();
});
/* ----------------------------------------------------------
:: DataTable
---------------------------------------------------------- */  

$(document).ready(function() {
    $('#example').DataTable();
} );

/* ----------------------------------------------------------
:: Editor
---------------------------------------------------------- */ 
tinymce.init({
    selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    toolbar_mode: 'floating',
});




/*---------------------------
:: toggle-password signup form
-----------------------------*/

$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });


/* ----------------------------------------------------------
:: Navigation :: Onclick show panel
---------------------------------------------------------- */  
document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show-nav')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }

    showNavbar('header-toggle','nav-bar','body-pd','header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
    });

/* ----------------------------------------------------------
:: Image Preview :: Edit Profile
---------------------------------------------------------- */  
function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');

    uploadField.addEventListener('change', getFile);

    function getFile(e){
        let file = e.currentTarget.files[0];
        checkType(file);
    }
    
    function previewImage(file){
        let thumb = box.querySelector('.js--image-preview'),
            reader = new FileReader();

        reader.onload = function() {
        thumb.style.backgroundImage = 'url(' + reader.result + ')';
        }
        reader.readAsDataURL(file);
        thumb.className += ' js--no-default';
    }

    function checkType(file){
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
        throw 'Datei ist kein Bild';
        } else if (!file){
        throw 'Kein Bild gewählt';
        } else {
        previewImage(file);
        }
    }
    
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
let box = boxes[i];
initDropEffect(box);
initImageUpload(box);
}

/// drop-effect
function initDropEffect(box){
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
    
    // get clickable area for drop effect
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);

    function fireRipple(e){
        area = e.currentTarget
        // create drop
        if(!drop){
        drop = document.createElement('span');
        drop.className = 'drop';
        this.appendChild(drop);
        }
        // reset animate class
        drop.className = 'drop';
        
        // calculate dimensions of area (longest side)
        areaWidth = getComputedStyle(this, null).getPropertyValue("width");
        areaHeight = getComputedStyle(this, null).getPropertyValue("height");
        maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

        // set drop dimensions to fill area
        drop.style.width = maxDistance + 'px';
        drop.style.height = maxDistance + 'px';
        
        // calculate dimensions of drop
        dropWidth = getComputedStyle(this, null).getPropertyValue("width");
        dropHeight = getComputedStyle(this, null).getPropertyValue("height");
        
        // calculate relative coordinates of click
        // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
        x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
        y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
        
        // position drop and animate
        drop.style.top = y + 'px';
        drop.style.left = x + 'px';
        drop.className += ' animate';
        e.stopPropagation();
        
    }
}

