# RasyDND

RasyDND je webová aplikace postavená v PHP, která poskytuje podrobné informace o různých fantasy rasách a jejich charakteristikách. Aplikace zahrnuje popisy, statistiky a magické schopnosti ras jako lidé, elfové, půlčíci, trpaslíci a dopleři.

## Funkce

- **Podrobné Popisy:** Každá rasa má obsáhlý popis zahrnující jejich historii, životní styl a jedinečné vlastnosti.
- **Statistická Data:** Specifické statistiky pro každou rasu, které pomáhají v rolových scénářích.
- **Magické Schopnosti:** Informace o magických schopnostech a omezeních jednotlivých ras.
- **Webové Stránky:** Individuální stránky pro různé druhy zbraní a brnění.

## Instalace

1. Klonujte repozitář:
   ```sh
   git clone https://github.com/OndrejKabrt/RasyDND.git

2. Vytrořte si v MySQL Databázi
    Databáze obsahuje jednu tabulku, a to tabulku uživatel. Tabulka obsahuje Id, username a password. Databáze je nutná zložit v případě chcete li, aby uživatelé měli možnost se registrovat, třeba pro víc funkcí na webovce. V případě této webovky žádný dodatečný obsah neexistuje, ale plánuji tuto webovku rozšířit. 

3. Otevřete si XAMPP
    Do config souboru si naklonujte cestu ke složce, tak aby si ho XAMPP mohl otevřít. 

4. Napojení do databáze
    První si otevřete v souborovém systému složku databases a v ní DatabaseConnection.php, a tam si upravíte ip addressu, uživatele, zaat svoje heslo a název databáze. To je vše.