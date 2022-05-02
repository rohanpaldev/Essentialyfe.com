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
            <form autocomplete="off" action='event-venues.php' method='post'>

                <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button>
                    </form> -->
                <!-- <form > -->
                <div class='container' style="max-width: 1430px;">

                    <div class='input-group input-group-sm mb-3'>
                        <div class='input-group-prepend'>
                            <!-- <span class='custom-select' id='inputGroup-sizing-sm'>Date Select</span> -->
                        </div>
                        <select name='Event' class='custom-select' id='inputGroupSelect01'>
                            <option value=" " selected > Event type</option>
                            <option value='Private'>Private</option>
                            <option value='Corporate'>Corporate</option>
                        </select>
                        
                        <div class="position-relative checkIncheckOut" style="width: 213px;">
                            <input type="text" class='custom-select inputCheckInOut' name="daterange" style="width: 115px;"/>
                            <div class="position-absolute checkInOut" style="width: 214px;font-size: 14px;">
                                <p style="margin-top: 5px;color: #555353;">Check In - Check Out Dates</p>
                            </div>
                        </div>
                        <input type='text' value = 'search' name = 'search' style='display:none;'>
                        <select name='House_style' class='custom-select' id='inputGroupSelect01'>
                            <option value=" " selected >House Style</option>
                            <option value='Modern'>Modern</option>
                            <option value='Vintage'>Vintage</option>
                            <option value='Traditional'>Traditional</option>
                            <option value='Asian'>Asian</option>
                            <option value='Victorian'>Victorian</option>
                            <option value='Spanish'>Spanish</option>
                            <option value='French'>French</option>
                            <option value='Mediteranean'>Mediteranean</option>
                            <option value='Desert'>Desert</option>
                            <option value='Hi-Tech'>Hi-Tech</option>
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
                        <select name='View' class='custom-select' id='inputGroupSelect01'>
                            <option value="('Y','N')" selected>View</option>
                            <option value="('Y')">Yes</option>
                            <option value="('N')">No</option>
                            <option value="('Y','N')" >Doesn't Matter</option>
                        </select>
                        <select name='Pool' class='custom-select' id='inputGroupSelect01'>
                            <option value='("Y","N")' elected>Pool</option>
                            <option value='("Y")'>Yes</option>
                            <option value='("N")'>No</option>
                            <option value='("Y","N")'>Doesn't Matter</option>
                        </select>
                        <select name='Parking' class='custom-select' id='inputGroupSelect01'>
                            <option value="('Y','N')"  selected>Parking</option>
                            <option value="('Y')">Yes</option>
                            <option value="('N')">No</option>
                            <option value="('Y','N')" >Doesn't Matter</option>
                        </select>
                        <select name='Price' class='custom-select' id='inputGroupSelect01'>
                            <option value=" " selected>Venue Price</option>
                            <option value='5000'>Up to $5,000</option>
                            <option value='10000'>$5,000 - $10,000</option>
                            <option value='25000'>$10,000 - $25,000</option>
                            <option value='100000'>$25,000 - $50,000</option>
                            <option value='100000'>$50,000 - $100,000</option>
                            <option value='250000'>$100,000 - $250,000</option>
                            <option value='250001'>$250,000 and up</option>
                        </select>
                        <!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
                        <button id="searchBtn" type="submit" class="btn btn-secondary btn-search search-btng" style="font-weight:300; color:white; background:black; margin-left:-4px; width: 115px;"><span class="glyphicon glyphicon-search">&nbsp;</span> <span class="label-icon"><i class="fa-solid fa-magnifying-glass" style="font-size:13px; margin-right:2px; height:24px; margin-top:12px;"></i> Search</span></button>
                    </div>
            </form>
        </div>
    </div>
</div>