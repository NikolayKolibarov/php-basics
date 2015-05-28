
<!DOCTYPE html>
<head>
    <title>Print Tags</title>
</head>
<body>
    <form method="get">
        <fieldset>
            Enter Tags: <br />
            <input type="text" name="input" />
            <input type="submit" value="Submit" />
            
            <?php
        
            if (isset($_GET['input'])): 
                $input = preg_split("/, /", $_GET['input']);
                $counts = array_count_values($input);
                arsort($counts);
                
                foreach ($counts as $key => $value): ?>
                
                <p>
                    <?= htmlspecialchars($key)?> : <?= htmlspecialchars($value)?> times
                </p> 
                
                <?php endforeach; ?>
                
                <p>
                    Most Frequent Tag is: <?php arsort($counts); echo htmlspecialchars(key( $counts));  ?>
                </p>
                
            <?php endif; ?>
      </fieldset>
    </form>
</body>