import { Link } from 'react-router-dom'

export default function Home() {
  return (
    <main className="home-page">
      <h1>Welcome to Loyalty Platform</h1>
      <p>Use the links below to sign in or create a new account.</p>
      <div className="home-actions">
        <Link to="/login" className="button">
          Login
        </Link>
        <Link to="/register" className="button secondary">
          Register
        </Link>
      </div>
    </main>
  )
}
