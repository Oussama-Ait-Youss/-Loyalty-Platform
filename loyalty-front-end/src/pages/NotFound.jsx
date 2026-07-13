import { Link } from 'react-router-dom'

export default function NotFound() {
  return (
    <main className="auth-page">
      <h1>Page not found</h1>
      <p>The page you are looking for does not exist.</p>
      <Link to="/">Return home</Link>
    </main>
  )
}
