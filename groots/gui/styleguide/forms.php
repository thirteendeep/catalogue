<form class="form" action="" data-parsley-validate novalidate>
    <fieldset>
        <h3 class="gui__title">Natives Inputs</h3>
        <div class="form-item" >
            <label for="exampleInputTextl">Name</label>
            <input type="text" id="exampleInputTextl" placeholder="Example of Text Input" required>
        </div>
        <div class="form-item">
            <label for="exampleInputEmail1">Email address</label>
            <input class="input--right-icon" type="email" id="exampleInputEmail1" placeholder="Example of Email Input" required>
            <i class="fa fa-envelope-o"></i>
        </div>
        <div class="form-item">
            <label for="exampleInputEmail2">Email address</label>
            <input class="input--left-icon" type="email" id="exampleInputEmail2" placeholder="Example of Email Input" required>
            <i class="fa fa-envelope-o"></i>
        </div>
        <div class="form-item--inline">
            <label for="exampleInputPassword">Password</label>
            <input type="password" id="exampleInputPassword" placeholder="Example of Password Input" required>
        </div>
        <div class="form-item">
            <label for="exampleInputPassword">Message</label>
            <textarea placeholder="Example of Textarea" required></textarea>
        </div>

        <h3 class="gui__title">Custom Select</h3>
        <div class="form-item">
            <select name="" id="" class="gr-select" required>
                <option disabled selected value="hide">Select ...</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </select>
        </div>

        <h3 class="gui__title">Custom Upload</h3>

        <div class="form-item" >
            <div class="file-upload--input">
                <label for="file-upload--input">Upload file</label>
                <input type="file" id="file-upload--input" name="file-upload--input" multiple>
            </div>
        </div>

        <div class="form-item" >
            <div class="file-upload--btn">
                <label for="file-upload--btn">Upload file</label>
                <input type="file" id="file-upload--btn" name="file-upload--btn" multiple>
            </div>
        </div>

        <h3 class="gui__title">Custom Radio</h3>
        <div class="form-item">
            <div class="radio-wrapper">
                <div class="radio">
                    <input type="radio" name="opt-in-out" id="opt-in" data-parsley-multiple="opt-in-out" required>
                    <label for="opt-in">Opt IN</label>
                </div>
                <div class="radio">
                    <input type="radio" name="opt-in-out" id="opt-out" data-parsley-multiple="opt-in-out">
                    <label for="opt-out">Opt OUT</label>
                </div>
            </div>
        </div>

        <div class="form-item--inline">
            <div class="radio-wrapper">
                <div class="radio">
                    <input type="radio" name="contact_title" id="f" required="" data-parsley-multiple="contact_title" required>
                    <label for="f">Mme, Mlle</label>
                </div>
                <div class="radio">
                    <input type="radio" name="contact_title" id="m" data-parsley-multiple="contact_title">
                    <label for="m">Monsieur</label>
                </div>
            </div>
        </div>

        <h3 class="gui__title">Custom Checkbox</h3>
        <div class="form-item">
            <div class="checkbox-wrapper">
                <div class="checkbox">
                    <input type="checkbox" name="rememberme" id="rememberme" required>
                    <label for="rememberme">Remember me</label>
                </div>
            </div>
        </div>
        <hr>
        <button btn="primary">Submit</button>
    </fieldset>
</form>
