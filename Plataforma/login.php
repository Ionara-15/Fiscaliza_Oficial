<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar no Fiscaliza Aí</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/Fiscaliza_sim.png"/>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Login</h2>
                <p>Entre com seu Email e Senha</p>
            </div>
            
            <form class="login-form" id="loginForm" novalidate>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required autocomplete="email">
                        <label for="email">Email</label>
                    </div>
                    <span class="error-message" id="emailError"></span>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="password" name="password" required autocomplete="current-password">
                        <label for="password">Senha</label>
                        <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                            <span class="eye-icon"></span>
                        </button>
                    </div>
                    <span class="error-message" id="passwordError"></span>
                </div>

                <div class="form-options">
                    <label class="remember-wrapper">
                        <input type="checkbox" id="remember" name="remember">
                        <span class="checkbox-label">
                            <span class="checkmark"></span>
                            Continuar logado
                        </span>
                    </label>
                </div>

                <button type="submit" class="login-btn">
                    <span class="btn-text">Entrar</span>
                    <span class="btn-loader"></span>
                </button>
            </form>

            <div class="signup-link">
                <p>Não tem conta? <a href="cadastro.php">Criar conta</a></p>
            </div>

            <div class="signup-link">
                <p>É Gerenciador? <a href="login_gerenciador.php">Login Gerenciador</a></p>
            </div>

            <div class="success-message" id="successMessage">
                <div class="success-icon">✓</div>
                <h3>Logado com sucesso!</h3>
                <p>Redirecionando para página principal...</p>
            </div>
        </div>
    </div>

    <script src="../../shared/js/form-utils.js"></script>
    <script src="script.js"></script>
    <script>
      class BasicLoginForm {
    constructor() {
        this.form = document.getElementById('loginForm');
        this.emailInput = document.getElementById('email');
        this.passwordInput = document.getElementById('password');
        this.passwordToggle = document.getElementById('passwordToggle');
        this.successMessage = document.getElementById('successMessage');
        
        this.init();
    }
    
    init() {
        // Initialize shared utilities
        FormUtils.addSharedAnimations();
        FormUtils.setupFloatingLabels(this.form);
        FormUtils.setupPasswordToggle(this.passwordInput, this.passwordToggle);
        
        // Add event listeners
        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.emailInput.addEventListener('input', () => this.validateField('email'));
        this.passwordInput.addEventListener('input', () => this.validateField('password'));
        
        // Add entrance animation
        FormUtils.addEntranceAnimation(this.form.closest('.login-card'), 100);
    }
    
    validateField(fieldName) {
        const input = document.getElementById(fieldName);
        const value = input.value.trim();
        let validation;
        
        // Clear previous errors
        FormUtils.clearError(fieldName);
        
        // Validate based on field type
        if (fieldName === 'email') {
            validation = FormUtils.validateEmail(value);
        } else if (fieldName === 'password') {
            validation = FormUtils.validatePassword(value);
        }
        
        if (!validation.isValid && value !== '') {
            FormUtils.showError(fieldName, validation.message);
            return false;
        } else if (validation.isValid) {
            FormUtils.showSuccess(fieldName);
            return true;
        }
        
        return true;
    }
    
    async handleSubmit(e) {
        e.preventDefault();
        
        const email = this.emailInput.value.trim();
        const password = this.passwordInput.value.trim();
        
        // Validate all fields
        const emailValid = this.validateField('email');
        const passwordValid = this.validateField('password');
        
        if (!emailValid || !passwordValid) {
            FormUtils.showNotification('Please fix the errors below', 'error', this.form);
            return;
        }
        
        // Show loading state
        const submitBtn = this.form.querySelector('.login-btn');
        submitBtn.classList.add('loading');
        
        try {
            // Simulate login process
            await FormUtils.simulateLogin(email, password);
            
            // Show success state
            this.showSuccess();
            
        } catch (error) {
            // Show error notification
            FormUtils.showNotification(error.message, 'error', this.form);
        } finally {
            // Remove loading state
            submitBtn.classList.remove('loading');
        }
    }
    
    showSuccess() {
        // Hide the form
        this.form.style.display = 'none';
        
        // Show success message
        this.successMessage.classList.add('show');
        
        
        setTimeout(() => {
            FormUtils.showNotification('Redirecting to dashboard...', 'success', this.successMessage);
        }, 2000);
    }
}


document.addEventListener('DOMContentLoaded', () => {
    new BasicLoginForm();
});
    </script>
    
</body>
</html>