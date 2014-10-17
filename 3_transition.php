<?php
    if(isset($_POST['url']))
    {
        transition(trim($_POST['url']));
    }
    echo '<form action="" method="POST" name="php">';
    echo "Transition by php <br>";
    echo "<input type=\"text\" name=\"url\" value=\"google.com\" />";
    echo "<input type=\"submit\" name=\"letsgo\" value=\"Transition\"/>";
    echo '</form>';
    
    function transition($url){
        Header("Location: http://{$url}");
        exit();
    }

    echo '</br></br></br>';
    echo "Transition by JavaScript <br>";
    echo "<input type=\"text\" name=\"url\" value=\"google.com\" />";
    echo "<input type=\"button\" name=\"letsgo\" value=\"Transition\" onclick=\"js_transition('ukr.net')\"/>";

echo '    
    <script type="text/javascript">
        function js_transition(url)
        {
            window.location.href="http://"+url;
        }
    </script>
    ';