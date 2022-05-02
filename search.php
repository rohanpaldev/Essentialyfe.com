<style>
    .checkInOut{
        height: 100%;
        top:0px;
        font-size:12px;
        background: #fff;
        border:1px solid #bab5b5;
    }
</style>

<div>
    <div style="margin-top: 45px;">
        <div class="col">
            <form autocomplete="off" action='index.php' method='post'>

                <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button>
                    </form> -->
                <!-- <form > -->
                <div class='container' style="max-width: 1430px;">

                    <div class='input-group input-group-sm mb-3'>
                        <div class='input-group-prepend'>
                            <!-- <span class='custom-select' id='inputGroup-sizing-sm'>Date Select</span> -->
                        </div>
                        <div class="position-relative checkIncheckOut" style="width: 213px;">
                            <input type="text" class='custom-select inputCheckInOut' name="daterange" style="width: 115px;" placeholder="Check In"/>
                            <div class="position-absolute checkInOut" style="width: 214px;font-size: 14px;">
                                <p style="margin-top: 5px;color: #555353;">Check In - Check Out Dates</p>
                            </div>
                        </div>
                        <input type='text' value = 'search' name = 'search' style='display:none;'>
                        <select name='stay' class='custom-select' id='inputGroupSelect01' required>
                            <option value="">Type of Stays</option>
                            <option value='venue'>Event</option>
                            <option value='film'>Film</option>
                            <option value='vacation'>Vacation</option>
                            <option value='ltrf'>Long Term</option>
                        </select>
                        <select name='Location' class='custom-select'  id='inputGroupSelect01'>
                            <option value="%" selected>Location</option>
                            <option value='Beverly Hills'>Beverly Hills</option>
                            <option value='Bel Air'>Bellair</option>
                            <option value='Brentwood'>Brentwood</option>
                            <option value='DTLA'>DTLA</option>
                            <option value='Encino'>Encino</option>
                            <option value='Hollywood'>Hollywood</option>
                            <option value='Hollywood Hills'>Hollywood Hills</option>
                            <option value='Holmby Hills'>Holmby Hills</option>
                            <option value='Malibu'>Malibu</option>
                            <option value='Newport Beach'>Newport Beach</option>
                            <option value='Sherman Oaks'>Sherman Oaks</option>
                            <option value='Studio City'>Studio City</option>
                            <option value='Traditional'>West Hollywood</option>
                            <option value='Westwood'>Westwood</option>
                            <option value='Woodland Hills'>Woodland Hills</option>                            
                            <option value='Tarzana'>Tarzana</option>
                        </select>
                        <select name='Capacity' class='custom-select' id='inputGroupSelect01'>
                            <option value="0-999999" selected># of attendees</option>
                            <option value='0-30'>0-30</option>
                            <option value='30-60'>30-60</option>
                            <option value='60-90'>60-90</option>
                            <option value='90-120'>90-120</option>
                            <option value='120-150'>120-150</option>
                            <option value='150-180'>150-180</option>
                            <option value='180-200'>180-200</option>
                            <option value='200-250'>200-250</option>
                            <option value='250-300'>250-300</option>
                            <option value='300-400'>300-400</option>
                            <option value='400-500'>400-500</option>
                            <option value='500-999999'>500+</option>
                        </select>
                        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
                        <button id="searchBtn" type="submit" class="btn btn-secondary btn-search search-btng" style="font-weight:300; color:white; background:black; margin-left:-4px; width: 115px;"><span class="glyphicon glyphicon-search">&nbsp;</span> <span class="label-icon"><i class="fa-solid fa-magnifying-glass" style="font-size:13px; margin-right:2px; height:24px; margin-top:12px;"></i> Search</span></button>
                    </div>
            </form>
        </div>
    </div>
</div>

<?php

if(isset($search) || isset($pool))
{
    // Pool
    echo "
    <form autocomplete='off' action='index.php' method='post'>
        <input type='text' value = 'pool' name = 'pool' style='display:none;'>
        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
        <button id='searchBtn' type='submit' class='btn btn-secondary btn-search search-btng' style='font-weight:300; color:white; background:black; margin-left:-4px; width: 115px;'><span class='glyphicon glyphicon-search'>&nbsp;</span> <span class='label-icon'><i class='fa-solid fa-magnifying-glass' style='font-size:13px; margin-right:2px; height:24px; margin-top:12px;'></i> Pool</span></button>
    </form>
    ";

    //
    echo "
    <form autocomplete='off' action='index.php' method='post'>
        <input type='text' value = 'pool' name = 'pool' style='display:none;'>
        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
        <button id='searchBtn' type='submit' class='btn btn-secondary btn-search search-btng' style='font-weight:300;margin-top: -64px;/* margin-left: -58px; */color:white;background:black;margin-left: 232px;width: 115px;'><span class='glyphicon glyphicon-search'>&nbsp;</span> <span class='label-icon'><i class='fa-solid fa-magnifying-glass' style='font-size:13px; margin-right:2px; height:24px; margin-top:12px;'></i> Views</span></button>
    </form>
    ";
    echo "
    <form autocomplete='off' action='index.php' method='post'>
        <input type='text' value = 'pool' name = 'pool' style='display:none;'>
        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
        <button id='searchBtn' type='submit' class='btn btn-secondary btn-search search-btng' style='font-weight:300;color:white;background:black;margin-left: -243px;width: 115px;margin-top: -110px;'><span class='glyphicon glyphicon-search'>&nbsp;</span> <span class='label-icon'><i class='fa-solid fa-magnifying-glass' style='font-size:13px; margin-right:2px; height:24px; margin-top:12px;'></i> Spa</span></button>
    </form>
    ";
    echo "
    <form autocomplete='off' action='index.php' method='post'>
        <input type='text' value = 'pool' name = 'pool' style='display:none;'>
        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
        <button id='searchBtn' type='submit' class='btn btn-secondary btn-search search-btng' style='font-weight:300;color:white;background:black;margin-left: -480px;width: 115px;margin-top: -158px;'><span class='glyphicon glyphicon-search'>&nbsp;</span> <span class='label-icon'><i class='fa-solid fa-magnifying-glass' style='font-size:13px; margin-right:2px; height:24px; margin-top:12px;'></i> Firepit</span></button>
    </form>
    ";

    echo "
    <form autocomplete='off' action='index.php' method='post'>
        <input type='text' value = 'pool' name = 'pool' style='display:none;'>
        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
        <button id='searchBtn' type='submit' class='btn btn-secondary btn-search search-btng' style='font-weight:300;color:white;background:black;margin-left: 469px;width: 115px;margin-top: -208px;'><span class='glyphicon glyphicon-search'>&nbsp;</span> <span class='label-icon'><i class='fa-solid fa-magnifying-glass' style='font-size:13px; margin-right:2px; height:24px; margin-top:12px;'></i> Gym</span></button>
    </form>
    ";

    echo "
    <form autocomplete='off' action='index.php' method='post'>
        <input type='text' value = 'pool' name = 'pool' style='display:none;'>
        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
        <button id='searchBtn' type='submit' class='btn btn-secondary btn-search search-btng' style='font-weight:300;color:white;background:black;margin-left: -719px;width: 115px;margin-top: -254px;'><span class='glyphicon glyphicon-search'>&nbsp;</span> <span class='label-icon'><i class='fa-solid fa-magnifying-glass' style='font-size:13px; margin-right:2px; height:24px; margin-top:12px;'></i> Backyard</span></button>
    </form>
    ";
}

?>