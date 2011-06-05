<div id="dates">
	<div id="created">
		<span class="date label">Created: </span><span class="date value">00-00-0000 00:00</span>
	</div>
	<div id="attended">
		<span class="date label">Stitched: </span><span class="date value">00-00-0000 00:00</span>
	</div>
	<div id="followup">
		<span class="date label">Followup: </span><span class="date value">00-00-0000 00:00</span>
	</div>
</div>

<img src="<?=base_url()?>Wound.jpg" alt="wound image" />
<div id="basic_info" class="wrapper">
	<div class="field">
		<span class="label">ID: </span>
		<span class="value">1234567</span>
	</div>
	<div class="field">
		<label for="name_input">Name: </label>
		<input type="text" name="name" id="name_input" />
	</div>
	<div class="field">
		<label for="age_input">Age: </label>
		<input type="text" name="age" id="age_input"/>
	</div>
	<div class="field">
		<label for="male">Sex: </label>
		<input type="radio" value="male" name="sex" id="male" /> <label for="male">Male</label>
		<input type="radio" value="female" name="sex" id="female" /> <label for="female">Female</label>
	</div>
	<div class="field">
		<label for="wound_loc_input">Wound Location: </label>
		<input type="text" id="wound_loc_input" />
	</div>
</div>

<div id="wound_details" class="wrapper">
	<h2>Wound Details</h2>
	<div class="field">
		<label for="stitches_req">Stitches Required: </label><input type="text" id="stitches_req" name="stitches_req" />
	</div>
	<div class="field">
		<label for="heal_time">Est. Time to Heal: </label><input type="text" id="heal_time" name="heal_time" />
	</div>
	<div class="field">
		<label for="width">Wound Width: </label><input type="text" id="width" name="width" />
	</div>
	<div class="field">
		<label for="height">Wound Height: </label><input type="text" id="height" name="height" />
	</div>
</div>

<div id="req_info" class="wrapper">
	<h2>Required Info</h2>
	<div class="field">
		<label for="w_types">Wound Type: </label>
		<select name="w_types" id="w_types">
			<option value="crazy">Crazy</option>
		</select>
	</div>
	<div class="field">
		<label for="severity">Severity: </label>
		<input type="radio" value="0" name="severity" id="s_0" /> <label for="s_0"></label>
	</div>
	<div class="field">
		<label for="comments">Comments: </label><br/>
		<textarea>We're cool</textarea>
	</div>
</div>

<div id="followup" class="wrapper">
	<h2>Followup</h2>
	<div class="field">
		<label for="f_complete">Completed: </label>
		<input type="checkbox" id="f_complete" />
	</div>
	<div class="field">
		<label for="f_comments">Comments: </label><br/>
		<textarea>Yo</textarea>
	</div>
</div>
<input type="submit" value="submit" />
