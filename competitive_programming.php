<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competitive Programming - Md. Tanim Ishrak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <?php include 'header.php'; ?>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-6">Competitive Programming Stats</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Codeforces User Data -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">Codeforces</h2>
                    <?php
                    // Fetch Codeforces user data using their API
                    $cf_user = 'Ki6ui-Par1na';
                    $cf_api_url = "https://codeforces.com/api/user.info?handles=$cf_user";
                    $cf_data = file_get_contents($cf_api_url);
                    $cf_data = json_decode($cf_data, true);
                    
                    if ($cf_data && isset($cf_data['result'][0])) {
                        $cf_user_info = $cf_data['result'][0];
                        echo "<img src='" . $cf_user_info['avatar'] . "' alt='Profile Picture' class='w-24 h-24 rounded-full mb-4'>";
                        echo "<p><strong>Username:</strong> " . $cf_user_info['handle'] . "</p>";
                        echo "<p><strong>Rating:</strong> " . $cf_user_info['rating'] . "</p>";
                        echo "<p><strong>Max Rating:</strong> " . $cf_user_info['maxRating'] . "</p>";
                        echo "<p><strong>Rank:</strong> " . $cf_user_info['rank'] . "</p>";
                    } else {
                        echo "<p>Codeforces data not available.</p>";
                    }
                    ?>
                </div>

                <!-- LeetCode User Data -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">LeetCode</h2>
                    <?php
                    // Fetch LeetCode user data using a third-party API
                    $lc_user = 'Ki6uiPar1na';
                    $lc_api_url = "https://leetcode-stats-api.herokuapp.com/$lc_user";
                    $lc_data = file_get_contents($lc_api_url);
                    $lc_data = json_decode($lc_data, true);
                    
                    if ($lc_data && isset($lc_data['status']) && $lc_data['status'] === 'success') {
                        echo "<img src='https://assets.leetcode.com/users/avatars/avatar_1698950708.png' alt='Profile Picture' class='w-24 h-24 rounded-full mb-4'>";
                        echo "<p><strong>Username:</strong> $lc_user</p>";
                        echo "<p><strong>Total Solved:</strong> " . $lc_data['totalSolved'] . "</p>";
                        echo "<p><strong>Ranking:</strong> " . $lc_data['ranking'] . "</p>";
                        echo "<p><strong>Easy:</strong> " . $lc_data['easySolved'] . " problems</p>";
                        echo "<p><strong>Medium:</strong> " . $lc_data['mediumSolved'] . " problems</p>";
                        echo "<p><strong>Hard:</strong> " . $lc_data['hardSolved'] . " problems</p>";
                    } else {
                        echo "<p>LeetCode data not available.</p>";
                    }
                    ?>
                </div>

                <!-- CodeChef User Data -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">CodeChef</h2>
                    <?php
                    // Fetch CodeChef user data from the API
                    $cc_user = 'ki6ui_par1na';
                    $cc_api_url = "https://codechef-api.vercel.app/handle/$cc_user";
                    $cc_data = file_get_contents($cc_api_url);
                    $cc_data = json_decode($cc_data, true);
                    
                    if ($cc_data && $cc_data['success']) {
                        echo "<img src='" . $cc_data['profile'] . "' alt='Profile Picture' class='w-24 h-24 rounded-full mb-4'>";
                        echo "<p><strong>Name:</strong> " . $cc_data['name'] . "</p>";
                        echo "<p><strong>Current Rating:</strong> " . $cc_data['currentRating'] . "</p>";
                        echo "<p><strong>Highest Rating:</strong> " . $cc_data['highestRating'] . "</p>";
                        echo "<p><strong>Stars:</strong> " . $cc_data['stars'] . "</p>";
                        echo "<p><strong>Global Rank:</strong> " . $cc_data['globalRank'] . "</p>";
                        echo "<p><strong>Country:</strong> <img src='" . $cc_data['countryFlag'] . "' alt='Country Flag' class='inline-block w-5 h-5'> " . $cc_data['countryName'] . "</p>";
                        echo "<p><strong>Country Rank:</strong> " . $cc_data['countryRank'] . "</p>";
                    } else {
                        echo "<p>CodeChef data not available.</p>";
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
