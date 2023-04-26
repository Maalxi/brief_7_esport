# bin/zsh

read -p "le mot de passe" mdp

mysql -u root -p$mdp < ./sql/init_sql.sql