<div class="container-fluid">
    <div class="row center_ip">
                <div class="ip_location">IP :<span id="ip"></span>      </div>
                <div class="ip_location">Country : <span id="country"></span> - <span id="country_code"></span></div>
                <div class="ip_location"> Region : <span id="region"></span> </div>
                <div class="ip_location"> Region Code : <span id="region_code"></span> </div>
                <div class="ip_location">City : <span id="city"></span> </div>
                <div class="ip_location">Zip Code: <span id="zip_code"></span></div>
                <div class="ip_location">Metro Code: <span id="metro_code"></span></div>
                <div class="ip_location">Time zone: <span id="timezone"></span></div>
        </div>
</div>

<script>
$.getJSON('https://freegeoip.live/json/')
     .done (function(location)
     {
          $('#country').html(location.country_name);
          $('#country_code').html(location.country_code);
          $('#region').html(location.region_name);
          $('#region_code').html(location.region_code);
          $('#city').html(location.city);
          $('#latitude').html(location.latitude);
          $('#longitude').html(location.longitude);
          $('#timezone').html(location.time_zone);
          $('#ip').html(location.ip);
          $('#zip_code').html(location.zip_code);
          $('#metro_code').html(location.metro_code);
     });
</script>

<style>
.ip_location {
  display: inline-block;
  margin: 15px;
}
.row.center_ip {
  text-align: center;
}
</style>

