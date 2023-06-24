using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace Clinivet1.Migrations
{
    public partial class updatedobanco4 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "PetTutorCEP",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "PetTutorCPF",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "PetTutorCidade",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "PetTutorContato",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "PetTutorEndereco",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "PetTutorNome",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");

            migrationBuilder.AddColumn<string>(
                name: "PetTutorNumero",
                table: "pets",
                type: "nvarchar(max)",
                nullable: false,
                defaultValue: "");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "PetTutorCEP",
                table: "pets");

            migrationBuilder.DropColumn(
                name: "PetTutorCPF",
                table: "pets");

            migrationBuilder.DropColumn(
                name: "PetTutorCidade",
                table: "pets");

            migrationBuilder.DropColumn(
                name: "PetTutorContato",
                table: "pets");

            migrationBuilder.DropColumn(
                name: "PetTutorEndereco",
                table: "pets");

            migrationBuilder.DropColumn(
                name: "PetTutorNome",
                table: "pets");

            migrationBuilder.DropColumn(
                name: "PetTutorNumero",
                table: "pets");
        }
    }
}
