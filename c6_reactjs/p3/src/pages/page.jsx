import Hero from "../components/hero";
import { getBestSellerBooks } from "../utils/books";
import CardBooksWrapper from "../components/card-book/card-books-wrapper";
import { Link } from "react-router";

export default function HomePage() {
  return (
    <>
      <Hero
        title="Toko Buku Abadi"
        desc="Kami menjual berbagai macam buku original dengan kualitas mulus dan harga yang mantap."
        imgSrc="/bookstore.jpg"
      />

      <div className="py-5">
        <div className="d-flex gap-3 mb-3">
          <button className="btn btn-sm btn-success">Best Seller</button>
          <Link to="/books">
            <button className="btn btn-sm btn-outline-success">
              All Books
            </button>
          </Link>
        </div>

        <CardBooksWrapper books={getBestSellerBooks()} />
      </div>
    </>
  );
}
