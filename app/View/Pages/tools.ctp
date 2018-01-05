<?php

Configure::write('count','0');

function panel($title = null,$text = null)//&$cnt = null
{
	$cnt = Configure::read('count');

	echo '<div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		      	<a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$cnt.'">
		          <b>'.$title.'</b>
		        </a>
		      </h4>
		    </div>
		    <div id="collapse'.$cnt.'" class="panel-collapse collapse in">
		      <div class="panel-body">
			  '.$text.'
		      </div>
		    </div>
		  </div>';
    Configure::write('count',$cnt+1);
}

?>


<div class="row">
	<div class="col-md-12">
		<h1 class="text-center pb20">Narzędzia</h1>
		<div class="panel-group" id="accordion">
		  <?php panel('Autohotkey (AHK)','Język skryptowy, który mocno ułatwia pisanie prostych aplikacji tudzież objeżdzanie skrótów windowsa.<br><a href="http://www.autohotkey.com/">Oficjalna strona</a>');?>
		  <?php panel('Blat','Program wysyłający maile z konsoli.<br><a href="http://www.blat.net/">Oficjalna strona</a>');?>
		  <?php panel('Bulk Rename Utility','Narzędzie do masowej zmiany nazw plików.<br><a href="http://www.bulkrenameutility.co.uk/Main_Intro.php">Oficjalna strona</a>');?>
		  <?php panel('CakePHP','Framework webowy napisany w PHP oparty o model MVC (Model-View-Controller).<br><a href="http://cakephp.org">Oficjalna strona</a>');?>
		  <?php panel('Calibre','Program do zarządzania biblioteką ebooków do kindla i nie tylko.<br><a href="http://calibre-ebook.com/">Oficjalna strona</a>');?>
		  <?php panel('CandyCane','Kopia <a href="http://www.redmine.org/">Redminea</a> czyli narzędzia do zarządzania projektem w Cakeu.<br><a href="https://github.com/yandod/candycane">Oficjalne repozytorium</a>');?>
		  <?php panel('CasperJS & PhantomJs','Dwa narzędzia do webscrapingu,web crawlingu.Bardzo przydatne.<br><a href="http://phantomjs.org/">Oficjalna strona PhantomJS</a><br><a href="http://casperjs.org/">Oficjalna strona CasperJS</a>');?>
		  <?php panel('Clinta Notes','Malutkie narzędzie do prowadzenia notatek z możliwością ich otagowania.<br><a href="http://cintanotes.com/">Oficjalna strona</a>');?>
		  <?php panel('Cmder','Zamiennik cmd.exe w miłej oprawie.<br><a href="http://bliker.github.io/cmder/">Oficjalna strona</a>');?>
		  <?php panel('FastStone Photo Resizer','Narzędzie do masowej zmiany wymiarów zdjęć.<br><a href="http://www.faststone.org/FSResizerDetail.htm">Oficjalna strona</a>');?>
		  <?php panel('FileZilla','Klient FTP.<br><a href="https://filezilla-project.org/">Oficjalna strona</a>');?>
		  <?php panel('FooBar','Odtwarzacz plików muzycznych.<br><a href="http://www.foobar2000.org/">Oficjalna strona</a>');?>
		  <?php panel('InkScape','Narzędzie do grafiki wektorowej.<br><a href="http://www.inkscape.org/en/">Oficjalna strona</a>');?>
		  <?php panel('Mozilla Firefox','Przeglądarka internetowa od Mozilli.<br><a href="https://www.mozilla.org/firefox/">Oficjalna strona</a>');?>
		  <?php panel('Mozilla Thunderbird','Klient Email od Mozilli.<br><a href="https://www.mozilla.org/pl/thunderbird/">Oficjalna strona</a>');?>
		  <?php panel('NBU Explorer','Narzędzie do przeglądania kopii zapasowej z telefonów Nokii.Bardzo przydatne.<br><a href="http://sourceforge.net/projects/nbuexplorer/">Oficjalna strona</a>');?>
		  <?php panel('Netbeans IDE','Bardzo rozbudowane zintegrowane środowisko programistyczne do PHP i nie tylko.<br><a href="https://netbeans.org/features/php/index.html">Oficjalna strona</a>');?>
		  <?php panel('NexusFile','Menedżer plików zamiennik total commandera.<br><a href="http://www.xiles.net/nexusfile/">Oficjalna strona</a>');?>
		  <?php panel('Nimble Text','Narzędzie do manipulacji teksem i danymi przydaję się przy wyciąganiu danych z różnych miejsc.<br><a href="http://nimbletext.com/">Oficjalna strona</a> ');?>
		  <?php panel('Opera Mobile Emulator','Narzędzie do testowania stron na komórkę.<br><a href="http://www.opera.com/pl/developer/mobile-emulator">Oficjalna strona</a>');?>
		  <?php panel('SoapUI','Narzędzie do testowania interfejsów sopa\'wych aplikacji.<br><a href="http://www.soapui.org/">Oficjalna strona</a>');?>
		  <?php panel('Sublime Text','Najlepszy edytor tekstu ever!<br><a href="http://www.sublimetext.com/">Oficjalna strona</a><br><a href="https://sublime.wbond.net/browse/popular">Globalny zbiór dostępnych pluginów</a>');?>
		  <?php panel('Titanium Studio','Narzędzie do tworzenia aplikacji mobilnych.<br><a href="http://www.appcelerator.com/titanium/titanium-studio/">Oficjalna strona</a>');?>
		  <?php panel('Twitter Bootstrap','Najpopularniejszy framework HTML,CSS i JS.<br><a href="http://getbootstrap.com/">Oficjalna strona</a>');?>
		  <?php panel('uGet','Program do masowego ściągania plików.<br><a href="http://ugetdm.com/">Oficjalna strona</a>');?>
		  <?php panel('VLC','Program do odtwarzania plików multimedialnych.<br><a href="http://www.videolan.org/vlc/">Oficjalna strona</a>');?>
		  <?php panel('Wamp','Serwer apache2+mysql+php.<br> <a href="http://www.wampserver.com/en/#download-wrapper">Oficjalna strona</a>');?>
		  <?php panel('Windirstat','Program pokazujący zajętość konkretnych fragmentów czy też folderów dysku.<br><a href="https://windirstat.info/">Oficjalna strona</a>');?>
		  <?php panel('Windows Grep','Narzędzie do tekstowego przeszukiwania plików.<br><a href="http://www.wingrep.com/">Oficjalna strona</a>');?>
		  <?php panel('Winmerge','Narzędzie do porównywania wersji pliku.<br><a href="http://winmerge.org/?lang=pl">Oficjalna strona</a>');?>
		  <?php panel('WTW','Przyjemny komunikator zamiennik gadu-gadu które już dawno przestało być fajne.<br><a href="http://wtw.im/">Oficjalna strona</a>');?>
	    </div>
	</div>
</div>