# bin/zsh
sudo mysql -u root -p12345678

read -p "le mot de passe" mdp

mysql -u root -p$mdp < ./sql/init_sql.sql