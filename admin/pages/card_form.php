<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Essentialyfe.com | Cards</title>
</head>
<body>
    <!--cards form start-->
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto mt-3">
                <caption>
                    <h1 class="text-center">
                        Essentialyfe Cards
                    </h1>
                </caption>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Type your name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="10" placeholder="Type your address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" class="form-control" name="area" id="area" placeholder="type your area" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="type your price">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="bedroom">Bedroom</label>
                                <select name="bedroom" id="bedroom" class="form-select">
                                    <option value="select">Select Bedroom</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="15+">15+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="bathroom">Bathroom</label>
                                <select name="bathroom" id="bathroom" class="form-select">
                                    <option value="select">Select Bathroom</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="guest">Guest</label>
                                <select name="guest" id="guest" class="form-select">
                                    <option value="select-guest">Select Guest</option>
                                    <option value="25">Up to 25 People</option>
                                    <option value="25-50">25-50</option>
                                    <option value="50-100">50-100</option>
                                    <option value="100-250">100-250</option>
                                    <option value="250-500">250-500</option>
                                    <option value="500-1000">500-1,000</option>
                                    <option value="1000-and-upto">1,000 and Up</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="squarefeet">Square feet</label>
                        <input type="text" name="squarefeet" id="squarefeet" class="form-control" placeholder="type square feet">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="type description here"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="vacation">Vacation</label>
                                <select name="vacation" id="vacation" class="form-select">
                                    <option value="select-vacation">Select Vacation</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="venue">Venue</label>
                                <select name="venue" id="venue" class="form-select">
                                        <option value="select-venue">Select Venue</option>
                                        <option value="yes">Yes</option>
                                        <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="film">Film</label>
                                <select name="film" id="film" class="form-select">
                                    <option value="select-film">Select Film</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pool">Pool</label>
                                <select name="pool" id="pool" class="form-select">
                                    <option value="select-pool">Select Pool</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="ltfr">Long Term Film Rentals</label>
                                <select name="ltfr" id="ltfr" class="form-select">
                                    <option value="select">Select</option>
                                    <option value="on">On</option>
                                    <option value="off">Off</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="wedding">Wedding</label>
                                <select name="wedding" id="wedding" class="form-select">
                                    <option value="select">select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="reg_date">Registration Date</label>
                        <input type="date" name="reg_date" id="reg_date" class="form-control" >
                    </div>
                    <div class="form-group mt-3 mb-5">
                        <button class="btn btn-primary w-100" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div >
    <!---cards form end ->
</body>
</html>

