const footerForm = document.querySelector("#footer-form");

const formLoading = (idForm, action) => {
  const loading = document.createElement("div");
  const loadingText = document.createElement("p");
  const loadingTextContent = document.createTextNode("Cargando...");
  const savingTextContent = document.createTextNode("Salvado!");
  const ErrorTextContent = document.createTextNode("Error...");

  loading.setAttribute("class", "loading-container");
  if (action == "show") {
    loading.setAttribute("id", "loading");
    loadingText.setAttribute("class", "loading-text");
    loading.appendChild(loadingText);
    loadingText.appendChild(loadingTextContent);
    idForm.appendChild(loading);
  }
  if (action == "save") {
    if (!document.getElementById("loading")) {
      loading.setAttribute("id", "loading");
      loadingText.setAttribute("class", "loading-text");
      loading.appendChild(loadingText);
      loadingText.appendChild(savingTextContent);
      idForm.appendChild(loading);
    } else {
      idForm.getElementById("loading").remove();
      loading.setAttribute("id", "loading");
      loadingText.setAttribute("class", "loading-text");
      loading.appendChild(loadingText);
      loadingText.appendChild(savingTextContent);
      idForm.appendChild(loading);
    }
  }
  if (action == "error") {
  }
  if (action == "delete") {
    idForm.getElementById("loading").remove();
  }
};

if (footerForm) {
  footerForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const hideFooter = footerForm.querySelector("#displayfooter");
    const getFooterId = footerForm.querySelector("#footer_template_id");
    const security = footerForm.querySelector("#security").value;
    const action = footerForm.querySelector("#action").value;

    if (getFooterId.value != "") {
      const url = thinkus_admin_ajax.admin_ajax;
      formLoading(footerForm, "show");
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
        .then((res) => {
          formLoading(footerForm, "save");
        });
    } else {
    }
  });
}
