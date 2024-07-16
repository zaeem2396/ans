const validateFields = (...fields) => {
    let valid = true;
    const f = {};
    for (let field of fields) {
        let value = $(`#${field}`).val();
        if(!value){
            $(`#${field}_err`).html("<p class='text-danger pb-2'>Please fillout this field</p>");
            valid = false;
        } else {
             $(`#${field}_err`).html("");
             f[field] = value;
        }
    }
    
    if (!valid) return;
    return f;
}