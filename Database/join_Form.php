
<!DOCTYPE html>
<html>
<head>
    <title>Add Contact to Group</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef1f5;
            padding: 40px;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        input[type="number"],
        input[readonly],
        select {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        select:focus,
        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.4);
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
          
    <div class="form-container">
        <h2>Add Contact to Group</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label for="contact_id">Enter Contact ID:</label>
            <input type="number" id="contact_id" name="contact_id" required>

            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" value="" readonly placeholder="Will be shown here">

            <label for="group_id">Select Group:</label>
            <select name="group" id="group_id" required>
                
                <option value="">-- Select Group --</option>
                <?php
                require 'connection.php';
                $sql = "SELECT * FROM groups";
                
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['group_name']) . "</option>";
                    }
                } else {
                    echo "<option value=''>No groups available</option>";
                }
                ?>
            </select>

            <button type="submit">Add to Group</button>
        </form>
    </div>
    <script>
        document.getElementById('contact_id').addEventListener('change', function(e) {
            var contactId = e.target.value;
            if (contactId) {
                fetch('join_number.php?contact_id='+contactId)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('contact_number').value = data;
                        if(data)
                    })
                    
                    .catch(error => console.error('Error fetching contact number:', error));
            } else {
                document.getElementById('contact_number').value = '';
            }
        });
    </script>

</body>
</html>

