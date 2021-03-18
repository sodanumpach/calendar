<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="date.php" method="POST">
            <div class="row g-3 m-5">
                <div class="col-sm">
                    <label class="form-label" for="form10Example1">Month</label>
                    <select class="custom-select" name="month" id="month">
                        <option value="01"> January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="col-sm-7">
                    <div class="form-outline">
                        <label class="form-label" for="form10Example1">Day</label>
                        <input type="text" id="day" name="day" class="form-control" />
                    </div>
                </div>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">submit</button>
    </div>
    </form>
    </div>
</body>
</html>