<?php
	function html_header($class)
	{
        $html = <<<END
        <!DOCTYPE html>
        <html>
        <head>
            <title>OOP Test</title>
        </head>

        <body>
        <h2>$class Test</h2>
END;
        return $html;
    }
    
    function html_footer(){
        $html = <<<END
            </body>
        </html>
END;
        return $html;
    }
?>