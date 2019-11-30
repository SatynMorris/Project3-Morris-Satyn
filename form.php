/*video code*/

.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


/*body code*/
@@font-face {
  font: open Sans;
}

body{
  background-image: image();
}
main{
  width: 100%;
  padding: 12px 20px;
  margin: 20px 20px;
  display: flex;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: transparent white;

}
<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'toolboxforcreatives.com' // Put you mail domain here
	,
	'Toolbox for Creatives' // Put your site name / form name here
	,
	'satynleedesigns@gmail.com' // Where will the form notification be sent?
	,
	'satynleedesigns@gmail.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
