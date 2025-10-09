import { useState } from "react";
import CardBooksWrapper from "../../components/card-book/card-books-wrapper";
import booksData from "../../utils/books";

export default function BookPage() {
  const [books, setBooks] = useState(booksData);

  const submitHandler = (e) => {
    // Disable reloading page and clear form inputs
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    // Create new book
    const newBook = {
      ...data,
      id: books.length === 0 ? 0 : books.at(-1).id + 1,
      year: Number.parseInt(data.year),
      image:
        "https://placehold.co/600x400?text=" +
        data.imageText.trim().replaceAll(" ", "+"),
    };

    // Update books
    setBooks((prev) => [...prev, newBook]);
    booksData.push(newBook);

    form.reset();
    alert("Buku berhasil ditambahkan!");
  };

  return (
    <>
      <div className="accordion mb-5" id="accordionExample">
        <div className="accordion-item">
          <h2 className="accordion-header">
            <button
              className="accordion-button collapsed bg-success-subtle"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              Add New Book Form
            </button>
          </h2>
          <div
            id="collapseOne"
            className="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
          >
            <div className="accordion-body">
              <form id="tesForm" onSubmit={submitHandler}>
                <div className="mb-3">
                  <label htmlFor="author" className="form-label">
                    Author
                  </label>
                  <input
                    type="text"
                    className="form-control form-control-sm"
                    id="author"
                    name="author"
                    required
                  />
                </div>

                <div className="mb-3">
                  <label htmlFor="year" className="form-label">
                    Year
                  </label>
                  <input
                    type="number"
                    className="form-control form-control-sm"
                    id="year"
                    name="year"
                    min="1978"
                    required
                  />
                </div>

                <div className="mb-3">
                  <label htmlFor="title" className="form-label">
                    Title
                  </label>
                  <input
                    type="text"
                    className="form-control form-control-sm"
                    id="title"
                    name="title"
                    required
                  />
                </div>

                <div className="mb-3">
                  <label htmlFor="description" className="form-label">
                    Description
                  </label>
                  <input
                    type="text"
                    className="form-control form-control-sm"
                    id="description"
                    name="description"
                    required
                  />
                </div>

                <div className="mb-3">
                  <label htmlFor="imageText" className="form-label">
                    Image Text
                  </label>
                  <input
                    type="text"
                    className="form-control form-control-sm"
                    id="imageText"
                    name="imageText"
                    required
                  />
                </div>

                <button type="submit" className="btn btn-primary btn-sm">
                  Submit
                </button>
                <button type="reset" className="btn btn-danger btn-sm mx-2">
                  Reset
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <CardBooksWrapper books={books} />
    </>
  );
}
