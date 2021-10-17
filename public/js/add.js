const addData = () => {
    const data = {
        name: document.querySelector("#jenis-surat").value,
        opening: document.querySelector("#opening-surat").value,
        main: document.querySelector("#isi-surat").value,
        closing: document.querySelector("#closing-surat").value,
    };

    if (
        data.name !== "" &&
        data.opening !== "" &&
        data.main !== "" &&
        data.closing !== ""
    ) {
        fetch(`/api/letter`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
                url: "/api/letter",
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
            .then((data) => console.log(data))
            .then(alert("Data berhasil ditambahkan"))
            .then(location.replace("/manage"))
            .catch((error) => console.log(error));
    } else {
        alert("Semua input harus diisi!");
    }
};
