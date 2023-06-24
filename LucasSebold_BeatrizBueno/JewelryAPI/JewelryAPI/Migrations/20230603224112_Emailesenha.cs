using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace JewelryAPI.Migrations
{
    public partial class Emailesenha : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "Email",
                table: "jewelries",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "Password",
                table: "jewelries",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "Email",
                table: "jewelries");

            migrationBuilder.DropColumn(
                name: "Password",
                table: "jewelries");
        }
    }
}
