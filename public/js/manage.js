fetch("/api/letter", {
    method: "GET",
    headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
        url: "/api/letter",
    },
})
    .then((response) => response.json())
    .then((data) => showTemplates(data))
    .catch((error) => console.log(error));

const showTemplates = (data) => {
    let num = 1;
    data.data.forEach((template) => {
        document.querySelector("#templates").innerHTML += `
                <th scope="row">${num}</th>
                <td>${template.name}</td>
                <td>
                <a href="edit?id=${template.id}" class="text-decoration-none me-1" > <i class="far fa-edit"></i> Edit</a> | <a href="#" class="text-decoration-none ms-1" onclick="deleteLetter(${template.id})"> <i class="far fa-trash-alt"></i> Hapus</a>
                </td>
                `;
        num += 1;
    });
};

const deleteLetter = (id) => {
    let answer = window.confirm("Hapus template ini?");
    if (answer) {
        fetch(`/api/letter/${id}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
                url: "/api/letter",
            },
        })
            .then((response) => response.json())
            .then((data) => console.log(data))
            .then(alert("Data berhasil dihapus"))
            .then(location.replace("/manage"))
            .catch((error) => console.log(error));
    }
};
