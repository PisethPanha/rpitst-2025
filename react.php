    <?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $host = 'localhost:3307';
    $user = 'root'; // Database username
    $password = ''; // Database password
    $dbname = 'ict_course';

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // a year1

    // a sesmes1
    $sql = "SELECT * FROM ict_year_1";
    $result = $conn->query($sql);

    $sesmes1 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes1[] = $row;
        }
    }
    //a sesmes1

    //a sesmes2
    $sql = "SELECT * FROM semester_2";
    $result = $conn->query($sql);

    $sesmes2 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes2[] = $row;
        }
    }
    //a sesmes2
    // a year1

    // a year2

    //a sesmes2
    $sql = "SELECT * FROM year2_sesmester1";
    $result = $conn->query($sql);

    $sesmes21 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes21[] = $row;
        }
    }
    //a sesmes2

    //a sesmes2
    $sql = "SELECT * FROM ict_year_2_sesmester2";
    $result = $conn->query($sql);
    $sesmes22 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes22[] = $row;
        }
    }
    //a sesmes2

    // a year2

    // a year3

    // a sesmes1

    $sql = "SELECT * FROM ict_year_3_sesmester1";
    $result = $conn->query($sql);

    $sesmes31 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes31[] = $row;
        }
    }

    // a sesmes1

    // a sesmes2

    $sql = "SELECT * FROM ict_year_3_sesmester2";
    $result = $conn->query($sql);

    $sesmes32 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes32[] = $row;
        }
    }

    //a sesmes2

    // a year3

    // a year4

    // a sesmes1

    $sql = "SELECT * FROM ict_year_4_sesmester1";
    $result = $conn->query($sql);

    $sesmes41 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes41[] = $row;
        }
    }

    //a sesmes1

    // a sesmes2

    $sql = "SELECT * FROM ict_year_4_sesmester2";
    $result = $conn->query($sql);

    $sesmes42 = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sesmes42[] = $row;
        }
    }
    // a sesmes2

    // a year4


    $data = [
        'sesmes1' => $sesmes1,
        'sesmes2' => $sesmes2,
        'sesmes21' => $sesmes21,
        'sesmes22' => $sesmes22,
        'sesmes31' => $sesmes31,
        'sesmes32' => $sesmes32,
        'sesmes41' => $sesmes41,
        'sesmes42' => $sesmes42
    ];

    // $dataYear2 = [
    //     
    // ];
    echo json_encode($data);
    // echo json_encode($dataYear2);

    $conn->close();
    ?>