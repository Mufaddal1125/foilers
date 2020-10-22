const add = document.querySelector("#addcustcon");
var id = 1;

function add_customer_concern() {

    id = id + 1;

    if (id > 5) {
        alert('Cannot Add More Customer Concern');
        return;
    }
    const cust_con = `<div class="form-group row clearfix">
                    <label for="customer_concern[]" class="col-sm-2 col-form-label float-left">${id}.</label>
                    <div class="col-sm-10 float-left">
                        <input type="text" name="customer_concern[]" id="" class="form-control cust-concern ">
                    </div>
                </div>`;
    $(".Customer-Concern").append(cust_con);
}

add.onclick = () => add_customer_concern();