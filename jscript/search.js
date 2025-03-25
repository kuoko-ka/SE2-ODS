document.addEventListener("DOMContentLoaded", function() {
    const input = document.getElementById("input");
    const jobs = document.querySelectorAll(".job");

    input.addEventListener("input", function() {
        let searchText = input.value.trim().toLowerCase();
        jobs.forEach(job => {
            let title = job.querySelector("h4")?.innerText.toLowerCase();
            // Combine text content of both <p> tags
            let description = Array.from(job.querySelectorAll("p")).map(p => p.innerText.toLowerCase()).join(" ");

            if (title.includes(searchText) || description.includes(searchText)) {
                job.style.display = "block";
            } else {
                job.style.display = "none";
            }
        });
    });
});
