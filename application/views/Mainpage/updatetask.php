<div class="py-3 px-5" style="background-color: #1f2839; min-height: 90vh;">
    <div class="mx-5 p-5" style="background-color: #f5f5ef; justify-content:center; min-height: 90vh;">
        <center>
            <h1 class="mb-4">Edit Task</h1>
        </center>
        <hr>
        <form action="">
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Task Title</label>
                </div>
                <div class="col-lg-8">
                    <!-- For Admin -->
                    <input type="text" class="form-control" name="title" placeholder="" value="">
                    <!-- For Admin -->

                    <!-- For Employee -->
                    <!-- <input type="text" class="form-control" name="name" placeholder="" value="" readonly> -->
                    <!-- For Employee -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Task Description</label>
                </div>
                <div class="col-lg-8">
                    <textarea class="form-control fixed" value="" id="exampleFormControlTextarea1" rows="3" name="description" style="resize: none;"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Start Time</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="starttime" placeholder="" value="">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">End Time</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="endtime" placeholder="" value="">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Assign To</label>
                </div>
                <div class="col-lg-8">
                    <!-- For Admin -->
                    <select name='assignto' class="form-control">
                        <option value='choose'>...</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                    </select>
                    <!-- For Admin -->

                    <!-- For Employee -->
                    <!-- <select name='assignto' class="form-control" readonly>
                        <option value='choose'>...</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                    </select> -->
                    <!-- For Employee -->
                </div>
            </div>
            <br>
            <div class="card-button" style="width: 100%;">
                <input type="submit" name="" id="" value="Submit" style="float: right; background-color: #b69d74; border: none; border-radius: 10%;" class="px-4 py-2 mb-3">
            </div>
        </form>
    </div>
</div>