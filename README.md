# phpXSLT

To execute it create a .bat file with a line:

for /f %%f in ('dir /b *.xhtml') do C:\php-7.3.8\php.exe transform.php generic.xsl %%f > %%~nf.xml
