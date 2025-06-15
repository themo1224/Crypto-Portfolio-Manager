# Crypto Portfolio Manager

**Crypto Portfolio Manager** is an open-source admin panel built with [Filament](https://filamentphp.com/) to simulate cryptocurrency portfolio management. The project is designed for users and developers who want to manage a simulated crypto portfolio, track token balances, and learn blockchain basics without using real cryptocurrency.

This project is beginner-friendly and focuses on learning blockchain concepts, PHP development, and admin panel design. It is built with international usage in mind and leverages blockchain testnets and APIs for safe and accessible development.

---

## Features

- 🌍 **Real-Time Token Data**: Fetch live token prices and updates using the [CoinGecko API](https://www.coingecko.com/en/api).
- 💼 **Simulated Portfolio Management**: Add, update, and delete cryptocurrencies in the portfolio.
- 🔗 **Blockchain Testnet Integration**: Interact with Ethereum testnets (e.g., Goerli, Sepolia) and simulate wallet functionality.
- 📊 **Transaction History**: View simulated transaction history with mock data.
- 📈 **Charts and Analytics**: Visualize portfolio trends and token price movements.
- 🔒 **Secure and Decentralized**: Use MetaMask for wallet simulation and interact with decentralized tools.

---

## Technology Stack

- **Backend**: PHP 8.x
- **Admin Panel Framework**: [Filament](https://filamentphp.com/)
- **Blockchain APIs**:
  - [CoinGecko API](https://www.coingecko.com/en/api) for token price data.
  - [Etherscan API](https://etherscan.io/apis) for blockchain data.
- **Frontend**: Filament's pre-built admin panel components.
- **Blockchain Testnets**: Goerli, Sepolia, or Binance Smart Chain Testnet.
- **Wallet**: [MetaMask](https://metamask.io/)

---

## Installation

Follow these steps to set up the project locally:

### Prerequisites
- PHP 8.x
- Composer
- A local server environment (e.g., Laragon, XAMPP, or Docker)
- [MetaMask](https://metamask.io/) installed in your browser
- A free [CoinGecko API Key](https://www.coingecko.com/en/api)

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/themo1224/crypto-portfolio-manager.git
   cd crypto-portfolio-manager
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up your `.env` file:
   ```bash
   cp .env.example .env
   ```
   - Add your CoinGecko API key to the `.env` file:
     ```
     COINGECKO_API_KEY=your_api_key_here
     ```

4. Run migrations:
   ```bash
   php artisan migrate
   ```

5. Serve the application:
   ```bash
   php artisan serve
   ```

6. Access the application in your browser:
   ```
   http://localhost:8000
   ```

---

## Usage

1. **Connect Wallet**:
   - Use MetaMask to connect to the Ethereum testnet (e.g., Goerli or Sepolia).
   - Request testnet tokens from a [faucet](https://goerlifaucet.com/).

2. **Manage Portfolio**:
   - Add tokens to your portfolio.
   - Track token prices and portfolio value.

3. **Simulate Transactions**:
   - View mock transaction history.
   - Experiment with sending and receiving test tokens.

4. **Analyze Trends**:
   - Use built-in charts to analyze token performance and portfolio trends.

---

## Learning Objectives

This project is perfect for developers aiming to:
- Understand blockchain basics like wallets, tokens, and testnets.
- Learn how to build admin panels using Filament.
- Gain experience integrating APIs (e.g., CoinGecko).
- Develop skills in PHP, Laravel, and modern web development.

---

## Roadmap

- [ ] Add support for multiple blockchain networks (e.g., Binance Smart Chain, Polygon).
- [ ] Enable real transactions on mainnets (optional for production).
- [ ] Add token staking simulation.
- [ ] Improve UI/UX with custom Filament components.
- [ ] Implement internationalization (i18n) for global users.

---

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or feature ideas.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Acknowledgments

- Thanks to [CoinGecko](https://www.coingecko.com/) and [Etherscan](https://etherscan.io/) for their amazing APIs.
- Inspired by the growing global adoption of blockchain technology.
- Developed with ❤️ in Iran.

---

## Contact

If you have questions or suggestions, feel free to reach out:
- **GitHub**: [themo1224](https://github.com/themo1224)
- **LinkedIn**: [Your LinkedIn Profile](#)
