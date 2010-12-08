
var rotator1 = {
	path:   'images/rotate/',
	id:   'r1',
	speed:  10000, 
	images: [
	  "g06_inside1.jpg","g06_inside2.jpg","g06_inside3.jpg","g06_inside4.jpg","g06_inside5.jpg","g06_inside6.jpg","g06_inside7.jpg","g06_inside8.jpg","g06_inside9.jpg","g06_outside1.jpg","g06_outside2.jpg",
	  "g07_inside1.jpg","g07_inside10.jpg","g07_inside11.jpg","g07_inside13.jpg","g07_inside14.jpg","g07_inside15.jpg","g07_inside16.jpg","g07_inside17.jpg","g07_inside2.jpg","g07_inside3.jpg","g07_inside4.jpg","g07_inside5.jpg","g07_inside7.jpg","g07_inside8.jpg","g07_inside9.jpg","g07_outside1.jpg",
	  "varna08_inside1.jpg","varna08_inside11.jpg","varna08_inside12.jpg","varna08_inside13.jpg","varna08_inside14.jpg","varna08_inside15.jpg","varna08_inside16.jpg","varna08_inside17.jpg","varna08_inside18.jpg","varna08_inside2.jpg","varna08_inside3.jpg","varna08_inside4.jpg","varna08_inside5.jpg","varna08_inside7.jpg","varna08_inside8.jpg","varna08_inside9.jpg","varna08_outside1.jpg","varna08_outside2.jpg",
      "g08_e01.jpg", "g08_e03.jpg", "g08_e04.jpg", "g08_e05.jpg", "g08_e06.jpg", "g08_e07.jpg", "g08_e08.jpg", "g08_e10.jpg", 
      "g08_e11.jpg", "g08_e13.jpg", "g08_e14.jpg", "g08_e15.jpg", "g08_e16.jpg", "g08_e18.jpg", "g08_e19.jpg", "g08_e20.jpg", 
      "g08_e21.jpg", "g08_e22.jpg", "g08_e23.jpg", "g08_e24.jpg", "g08_e25.jpg", "g08_e26.jpg",
      "b09_inside1.jpg", "b09_inside2.jpg", "b09_inside3.jpg", "b09_inside4.jpg", "b09_inside5.jpg", 
      "b09_inside6.jpg", "b09_inside7.jpg", "b09_inside8.jpg", "b09_inside9.jpg", "b09_inside10.jpg", 
      "b09_inside11.jpg", "b09_inside12.jpg", "b09_inside13.jpg", "b09_inside14.jpg", "b09_inside15.jpg", 
      "b09_inside16.jpg", "b09_inside17.jpg", "b09_inside18.jpg", "b09_inside19.jpg", "b09_inside20.jpg",
      "b09_outside1.jpg"
	],
	bTrans: true,    
	bMouse: true,	
	bRand: true
};
function initRotator() {
	dw_Rotator.setup(rotator1);
}
addLoadEvent(initRotator);
hs.graphicsDir = 'highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.outlineWhileAnimating = true;

function min(a, b) {
    if (a < b) {
        return a;
    }
    return b;
}

function writeImage(source, maxWidth, maxHeight) {
    var newImg = new Image();
    newImg.src = source;
    var image_width = newImg.width;
    var image_height = newImg.height;
    
    var scaling = min(min(maxWidth / image_width, maxHeight / image_height), 1);
    image_width = image_width * scaling;
    image_height = image_height * scaling;
    if (image_width == 0) {
        image_width = maxWidth;
    }
    if (image_height == 0) {
        image_height = maxHeight;
    }
    
    
    var image1 = '<img src="' + source + '" width="' + image_width + '"  height="' + image_height + '">';

    document.write(image1);
}