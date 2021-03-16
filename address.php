

<!-- address section -->

    <!-- <section class="address-section">
        <div class="row">
            <div class="full-address-form">
                <h5>Sign up</h5>
            <span>&#8592;</span><p>Step 2 of 3</p><span>&#8594;</span>
                <h3>address</h3>
                <button class="btn">home</button>
                <form action="account.php" class="address-form" method="POST">
                    <label for="area">select area</label>
                    <select name="area" id="area">
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                    </select>
                    <label for="road">Road</label>
                    <input type="text" name="road">
                    <label for="flat">Flat/Apartment no.</label>
                    <input type="text" name="flat">
                    <div class="house">
                        <label for="house" >house</label>
                        <input type="text" name="house" >
                    </div>
                    <div class="zip-code">
                        <label for="zip-code">Zip code</label>
                        <input type="number" name="zip-code">
                    </div>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn">Continue</button>
                    
                    <a href="personalinfo.php" class="btn">Go back</a>
                </form>

            </div>
        </div>
    </section>
 -->
    <!-- footer section -->


    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Get Values of Selected Checboxes</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("button").click(function(){
            var favorite = [];
            $.each($("input[name='sport']:checked"), function(){
                favorite.push($(this).val());
            });
            alert("My favourite sports are: " + favorite.join(", "));
        });
    });
</script>
</head>
<body>
    <form>
        <h3>Select your favorite sports:</h3>
        <label><input type="checkbox" value="football" name="sport"> Football</label>
        <label><input type="checkbox" value="baseball" name="sport"> Baseball</label>
        <label><input type="checkbox" value="cricket" name="sport"> Cricket</label>
        <label><input type="checkbox" value="boxing" name="sport"> Boxing</label>
        <label><input type="checkbox" value="racing" name="sport"> Racing</label>
        <label><input type="checkbox" value="swimming" name="sport"> Swimming</label>
        <br>
        <button type="button">Get Values</button>
    </form>
</body>
</html>

 