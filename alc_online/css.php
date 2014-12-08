<style>


labelx {
    float: left;
    width: 20%;
    text-align: right;
    margin-right: 0.5em;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
}
.form-field-no-caption {
    /* margin-left: 20%; */
    padding-left: 0.5em;
}

.form-field-no-caption2 {
     margin-left: 20%;
    padding-left: 0.5em;
}

</style>

<form>
    <span class='labelx'>
    <label>Radio:</label>
    <input type="radio" name='option' ID='option_1'/><label for='option_1'>Option 1</label><br/>
    <span class="form-field-no-caption"><input type="radio" name='option' ID='option_2'/><label for='option_2'>Option 2</label></span><br/>
    </span>
    
    <label for='name_textfield'>Textfield:</label>
   <span  class="form-field-no-caption2"> <input type="text" name='name' ID='name_textfield'/></span><br/>

    <span  class="form-field-no-caption2"><input type="submit" value="submit"/></span>
</form>