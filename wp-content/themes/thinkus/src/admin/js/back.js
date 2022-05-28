const footerForm = document.querySelector("#footer-form");

if (footerForm) {
  footerForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const hideFooter = footerForm.querySelector("#displayfooter");
    const getFooterId = footerForm.querySelector("#footer_template_id");
    const security = footerForm.querySelector("#security").value;
    const action = footerForm.querySelector("#action").value;

    if (getFooterId.value != "") {
      const url = thinkus_admin_ajax.admin_ajax;
      const formData = new FormData();
      formData.append("action", action);
      formData.append("security", security);
      formData.append("footer_template_id", getFooterId.value);
      formData.append("displayfooter", hideFooter.checked);
      fetch(url, {
        method: "POST",
        body: formData,
      })
        .then((res) => res.json())
        .then((res) => console.log(res));
    } else {
    }
  });
}
