const add = document.querySelector("#addcustcon");
var id = 1;

function add_customer_concern() {

    id = id + 1;

    if (id > 9) {
        alert('Cannot Add More Customer Concern');
        return;
    }
    const cust_con = `<div class="form-group row clearfix">
                    <label for="custconcern${id}" class="col-sm-2 col-form-label float-left">${id}.</label>
                    <div class="col-sm-10 float-left">
                        <input type="text" name="custconcern${id}" id="" class="form-control cust-concern ">
                    </div>
                </div>`;
    $(".Customer-Concern").append(cust_con);
}

add.onclick = () => add_customer_concern();