const hamburger = document.querySelector(".toggle-btn");

hamburger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

function InvoicereportSearch() {
  var fdate = document.getElementById("Fromdate").value;
  var tdate = document.getElementById("Todate").value;

  var form = new FormData();
  form.append("fdate", fdate);
  form.append("tdate", tdate);

  var r = new XMLHttpRequest();

  r.onreadystatechange = () => {
    if (r.readyState == 4) {
      var text = r.responseText;
      if (text == "Please Select From Date") {
        alert(text);
      } else if (text == "Please Select To Date") {
        alert(text);
      } else {
        document.getElementById("invoiceresult").innerHTML = text;
      }
    }
  };
  r.open("POST", "Invoice-report-Process.php", true);
  r.send(form);
}

function InvoiceitemreportSearch() {
  var fdate = document.getElementById("Fromdate").value;
  var tdate = document.getElementById("Todate").value;

  var form = new FormData();
  form.append("fdate", fdate);
  form.append("tdate", tdate);

  var r = new XMLHttpRequest();

  r.onreadystatechange = () => {
    if (r.readyState == 4) {
      var text = r.responseText;
      if (text == "Please Select From Date") {
        alert(text);
      } else if (text == "Please Select To Date") {
        alert(text);
      } else {
        document.getElementById("invoice-item-result").innerHTML = text;
      }
    }
  };
  r.open("POST", "Invoice-item-report-Process.php", true);
  r.send(form);
}

function itemreport() {
  var item_code = document.getElementById("item_code").value;

  var form = new FormData();
  form.append("item_code", item_code);

  var r = new XMLHttpRequest();

  r.onreadystatechange = () => {
    if (r.readyState == 4) {
      var text = r.responseText;

      document.getElementById("itemresult").innerHTML = text;
    }
  };
  r.open("POST", "Item-report-Process.php", true);
  r.send(form);
}

function customerSubmit(event) {
  event.preventDefault();
  var formData = new FormData(event.target);

  var r = new XMLHttpRequest();

  r.onreadystatechange = () => {
    if (r.readyState == 4) {
      var text = r.responseText;
      if (text == "New Customer Added.") {
        alert(text);
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };
  r.open("POST", "customer-registration-process.php", true);
  r.send(formData);
}

function itemSubmit(event) {
  event.preventDefault();
  var formData = new FormData(event.target);

  var r = new XMLHttpRequest();

  r.onreadystatechange = () => {
    if (r.readyState == 4) {
      var text = r.responseText;
      if (text == "New item Added.") {
        alert(text);
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };
  r.open("POST", "item-registration-process.php", true);
  r.send(formData);
}
