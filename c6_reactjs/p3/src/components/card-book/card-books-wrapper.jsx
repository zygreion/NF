import CardBook from "./card-book";

function CardBooksWrapper({ books }) {
  return (
    <div className="row row-gap-5 column-gap-1 row-cols-1 row-cols-sm-3 row-cols-lg-5 g-0 justify-content-evenly">
      {books.map((book) => (
        <CardBook
          key={book.id}
          id={book.id}
          title={book.title}
          author={book.author}
          year={book.year}
          description={book.description}
          image={book.image}
        />
      ))}
    </div>
  );
}

export default CardBooksWrapper;
