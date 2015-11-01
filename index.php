<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>AngerMeter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link href="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.css" rel="stylesheet">
  <link href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.2/jquery.mobile-1.4.2.css" rel="stylesheet">
  <link rel="stylesheet" href="themes/angermeter.min.css" />
  <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
  <script src="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.js"></script>
  <script src="app.js"></script>
  <script src="script.js"></script>

</head>
<body onload="refresh()">
<a id="mobile-menu-trigger" class="ui-btn ui-icon-bars ui-btn-icon-right" style="z-index: 40;" href="#page3"></a>

<div id="popupInfo"></div>

<div data-role="page" data-control-title="Sign in" id="page1">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content">
    	<form id="loginForm" method="post" action="#">
	        <div class="ui-field-contain" data-controltype="textinput">
	            <input name="user" id="user" placeholder="Type your username..."
	            value="" type="text">
	        </div>
	        <div class="ui-field-contain" data-controltype="textinput">
	            <input name="pass" id="pass" placeholder="Type your password..."
	            value="" type="password">
	        </div>
	        <input id="signIn" type="submit" value="Sign in">
	        <div data-controltype="textblock">
	            <p>
	                or <a href="#page2">sign up</a>
	            </p>
	        </div>
        </form>
    </div>
</div>
<div data-role="page" data-control-title="Sign up" id="page2">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content">
    	<form method="post" id="signUpForm">
	        <div class="ui-field-contain" data-controltype="textinput">
	            <input name="signUpUsername" id="signUpUsername" placeholder="Username" value="" type="text">
	        </div>
	        <div class="ui-field-contain" data-controltype="textinput">
	            <input name="signUpPassword" id="signUpPassword" placeholder="Password"
	            value="" type="password">
	        </div>
	        <div class="ui-field-contain" data-controltype="textinput">
	            <input name="repeatSignUpPassword" id="repeatSignUpPassword" placeholder="Repeat password"
	            value="" type="password">
	        </div>
	        	<input id="signUpButton" type="submit" value="Sign up">
    	</form>
	</div>
</div>
<div data-role="page" data-control-title="Menu" id="page3">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content">
        <a id="rateYourAngerLink" href="#page4" class="ui-btn ">
            Rate your anger
        </a>
        <a id="calmYourselfLink" href="#page5" class="ui-btn ">
            Calm yourself
        </a>
        <a id="historyLink" href="#page6" class="ui-btn ">
            History
        </a>
        <a id="pulseGraphLink" href="#page7" class="ui-btn ">
            Pulse graph
        </a>
        <a id="sign-out-btn" href="#" class="ui-btn ">
            Sign out
        </a>
    </div>
</div>
<div data-role="page" data-control-title="Rate your anger" id="page4">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content">
    	<form method="post" action="#" id="rateYourAngerForm">
	        <div class="" data-controltype="selectmenu">
	            <select id="angerLevel" name="angerLevel">
	                <option value="" disabled selected>
	                    <a class="ui-btn">Level of anger</a>
	                </option>
	                <option value="1">
	                    Irritated
	                </option>
	                <option value="2">
	                    Annoyed
	                </option>
	                <option value="3">
	                    Frustrated
	                </option>
	                <option value="4">
	                    Angry
	                </option>
	                <option value="5">
	                    Furious
	                </option>
	                <option value="6">
	                    Explosive
	                </option>
	            </select>
	        </div>
	        <div class="" data-controltype="textarea">
	            <label for="angerCause">
	                What caused the anger?
	            </label>
	            <textarea name="angerCause" id="angerCause" placeholder=""></textarea>
	        </div>
	        <div class="" data-controltype="textarea">
	            <label for="angerResolve">
	                What resolved the anger?
	            </label>
	            <textarea name="angerResolve" id="angerResolve" placeholder=""></textarea>
	        </div>
	        <div class="" data-controltype="textarea">
	        	<label for="angerReflection">Own reflection</label>
	        	<textarea name="angerReflection" id="angerReflection" placeholder=""></textarea>
	        </div>
	        <input type="submit" value="Save">
        </form>
    </div>
</div>
<div data-role="page" data-control-title="Calm yourself" id="page5">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content">
        <div data-controltype="textblock" class="calmer">
            <p>
                <b>
                    Calm your tits
                </b>
            </p>
        </div>
        <div data-controltype="textblock" class="calmer">
            <p>
                <b>
                    Take a deep breath
                </b>
            </p>
        </div>
        <div data-controltype="textblock" class="calmer">
            <p>
                <b>
                    Smoke a cigarette
                </b>
            </p>
        </div>
        <div data-controltype="textblock" class="calmer">
            <p>
                <b>
                    Go for a walk
                </b>
            </p>
        </div>
        <div>
            <a id="addCalmer" href="" data-transition="fade">
                Add your own
            </a>
        </div>
    </div>
</div>
<div data-role="page" data-control-title="History" id="page6">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content" id="entry-container">
        
    </div>
</div>
<div data-role="page" data-control-title="Pulse graph" id="page7">
    <div data-theme="b" data-role="header">
        <h1 class="ui-title">
            AngerMeter
        </h1>
    </div>
    <div role="main" class="ui-content">
    
    </div>
</div>

</body>
</html>